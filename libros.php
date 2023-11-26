<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Libro POO</title>
</head>
<body>
    
</body>
</html>
<?php

// Clase abstracta ReadingMaterial
abstract class ReadingMaterial {
    private $id;
    private $title;
    private $pages;
    private $price;
    private $editor;

    public function __construct($id, $title, $pages, $price, $editor) {
        $this->id = $id;
        $this->title = $title;
        $this->pages = $pages;
        $this->price = $price;
        $this->editor = $editor;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPages() {
        return $this->pages;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getEditor() {
        return $this->editor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setEditor($editor) {
        $this->editor = $editor;
    }

    abstract public function addIVA();
    
    public function mostrarCategoria() {
        if ($this->pages < 50) {
            return "mini";
        } else {
            return "large";
        }
    }
}

// Clase Book (hija de ReadingMaterial)
class Book extends ReadingMaterial {
    private $chapters;
    private $authors;

    public function __construct($id, $title, $pages, $price, $editor, $chapters, $authors) {
        parent::__construct($id, $title, $pages, $price, $editor);
        $this->chapters = $chapters;
        $this->authors = $authors;
    }

    public function getChapters() {
        return $this->chapters;
    }

    public function getAuthors() {
        return $this->authors;
    }

    public function setChapters($chapters) {
        $this->chapters = $chapters;
    }

    public function setAuthors($authors) {
        $this->authors = $authors;
    }

    public function addIVA() {
        $this->setPrice($this->getPrice() * 1.04); // 4% IVA 
    }
}

// Clase Magazine (hija de ReadingMaterial)
class Magazine extends ReadingMaterial {
    private $additionalResources;

    public function __construct($id, $title, $pages, $price, $editor, $additionalResources) {
        parent::__construct($id, $title, $pages, $price, $editor);
        $this->additionalResources = $additionalResources;
    }

    public function getAdditionalResources() {
        return $this->additionalResources;
    }

    public function setAdditionalResources($additionalResources) {
        $this->additionalResources = $additionalResources;
    }

    public function addIVA() {
        $this->setPrice($this->getPrice() * 1.09); // 9% IVA
    }
}

// Clase Publisher
class Publisher {
    private $id;
    private $name;
    private $address;
    private $telephone;
    private $website;

    public function __construct($id, $name, $address, $telephone, $website) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->website = $website;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }
}

// Crear un objeto Publisher
$publisher = new Publisher(1, "Editorial XYZ", "Calle 123", "123-456-789", "www.editorial.com");

// Crear un objeto Book
$book = new Book(1, "Aprende PHP ", 300, 25.99, $publisher, 15, "Juan Garcia");

// Crear un objeto Magazine
$magazine = new Magazine(2, "Marca", 60, 5.99, $publisher, "Descarga Online Gratis");

// Mostrar la información de los objetos
echo "<strong><h2>INFORMACION DE LOS OBJETOS CREADOS</h2></strong>";
echo "<br>";
echo "<strong>Publisher:</strong> " . $publisher->getName() . "<br>";
echo "<strong>Titulo Libro:</strong> " . $book->getTitle() . "<br>";
echo "<strong>Autores del libro:</strong> " . $book->getAuthors() . "<br>";
echo "<strong>Titulo Revista:</strong> " . $magazine->getTitle() . "<br>";
echo "<strong>Revista Additional Resources:</strong> " . $magazine->getAdditionalResources() . "<br>";

// Actualizar los objetos
$book->setPrice(29.99);
$magazine->setAdditionalResources("Disponible");

// Mostrar la información actualizada
echo "<strong>Precio del libro actualizado:</strong> " . $book->getPrice() . "<br>";
echo "<strong>Revista Actualizada Recursos Adicionales:</strong> " . $magazine->getAdditionalResources() . "<br>";

// Función de ordenación utilizando BubbleSort para ordenar por precio ascendente
function bubbleSortporPrecio($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j]->getPrice() > $arr[$j + 1]->getPrice()) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// array de libros y revistas donde los ordenados por precio
echo "<br>";
echo "<strong><h3>ARRAY LIBROS ORDENADO POR PRECIOS</h3></strong>";
$readingMaterials = array(
    new Book(2, "Python Basico", 250, 19.99, $publisher, 12, "Alicia Sa"),
    new Book(3, "Dark Web", 400, 29.99, $publisher, 20, "Bob Lol"),
    new Magazine(3, "La ciencia de hoy", 48, 4.99, $publisher, 18, "Peter Gry"));
    echo "<pre>";
    print_r(bubbleSortporPrecio($readingMaterials));
    echo "</pre>";