<?php

function createProduct(array $fields)
{
    productValidation($fields, SESSION_KEYS::CREATE_PRODUCT);

    $checkOnName = dbSelect(Tables::Products, condition: "name = '$fields[name]'", isSingle: true);

    if (!empty($checkOnName)) {
        notify("Product with name [$fields[name]] already exists", 'warning');
    }
    conditionRedirect(!empty($checkOnName), '/admin/products/create');

    $fields['is_main'] = (int)$fields['is_main'];

    $sql = "INSERT INTO " . Tables::Products->value . " (name, description, price, quantity, is_main) VALUES (:name, :description, :price, :quantity, :is_main)";
    $query = DB::connect()->prepare($sql);
    $query->execute($fields);

    flushSessionByKey(SESSION_KEYS::CREATE_PRODUCT);

    notify('The product was created');

    redirect('/admin/products');
}

function editProduct(array $fields)
{
    $uri = "/admin/products/edit/$fields[product_id]";
    productValidation($fields, SESSION_KEYS::EDIT_PRODUCT, $uri);

    $fields['is_main'] = (int)$fields['is_main'];

    $sql = "UPDATE " . Tables::Products->value . ' SET name = :name, description = :description, price = :price, quantity = :quantity, is_main = :is_main WHERE id = :product_id';
    $query = DB::connect()->prepare($sql);
    $query->execute($fields);

    flushSessionByKey(SESSION_KEYS::CREATE_PRODUCT);

    notify('The product was updated successfully');
    redirect($uri);
}

function productValidation(array $fields, SESSION_KEYS $key, $uri = '/admin/products/create')
{
    updateSessionFields(SESSION_KEYS::CREATE_PRODUCT, $fields);

    unset($fields['description']);
    unset($fields['is_main']);
    unset($fields['products_id']);

    $isEmptyFields = emptyFields($fields, SESSION_KEYS::CREATE_PRODUCT);
    $isNegativeValues = validateOnNegativeValues($fields['price'], $fields['quantity']);

    conditionRedirect($isEmptyFields || $isNegativeValues, '/admin/products/create');
}

function validateOnNegativeValues(float $price, int $quantity)
{
    $result = false;

    foreach (compact('price', 'quantity') as $key => $value) {
        if ($value < 0) {
            $_SESSION[SESSION_KEYS::CREATE_PRODUCT->value]['errors'][$key] = 'values should be more than 0';
            $result = true;
        }
    }

    return $result;
}

function getProducts(bool $isMain = true): array
{
    $condition = "is_main = " . (int)$isMain;

    return dbSelect(Tables::Products, condition: $condition);
}

function showMainProductsTable(): void
{
    displayInTable(getProducts());
}

function showAdditionalProductsTable(): void
{
    displayInTable(getProducts(false));
}

function displayInTable(array $products = []): void
{
    if (empty($products)) {
        echo "<h5>There is nothing in this category</h5>";
    } else {
        include ADMIN_PAGE_DIR . '/products/parts/table.php';
    }
}

function removeProduct(int $id)
{
    $sql = "DELETE FROM " . Tables::Products->value . " WHERE id = :id";
    $query = DB::connect()->prepare($sql);

    $query->bindParam('id', $id, PDO::PARAM_INT);

    $query->execute();

    notify("Product was removed");
    redirect('/admin/products');
}
