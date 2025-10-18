create table productoses
(
    id int
    AUTO_INCREMENT PRIMARY KEY,
    nombre varchar
    (50),
    descripcion varchar
    (500),
    precio double
    (10, 2)   
);

    create table productosen
    (
        id int
        AUTO_INCREMENT PRIMARY KEY,
    nombre varchar
        (50),
    descripcion varchar
        (500),
    precio double
        (10, 2)   
);

        INSERT INTO productoses
            (nombre, descripcion, precio)
        VALUES
            ('Camiseta', 'Camiseta de algodón, talla M', 15.99),
            ('Laptop', 'Laptop de 14 pulgadas, 8GB RAM, 256GB SSD', 749.50),
            ('Auriculares', 'Auriculares inalámbricos con cancelación de ruido', 89.99),
            ('Mochila', 'Mochila resistente al agua, 20 litros', 39.95),
            ('Café', 'Café molido premium, 500g', 12.50);

        INSERT INTO productosen
            (nombre, descripcion, precio)
        VALUES
            ('T-Shirt', 'Cotton T-shirt, size M', 15.99),
            ('Laptop', '14-inch laptop, 8GB RAM, 256GB SSD', 749.50),
            ('Headphones', 'Wireless headphones with noise cancellation', 89.99),
            ('Backpack', 'Water-resistant backpack, 20 liters', 39.95),
            ('Coffee', 'Premium ground coffee, 500g', 12.50);

