<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - class</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body class="flex min-h-[100vh] justify-center items-center text-black">
    <main class="bg-purple-300/40 h-[600px] w-[380px] rounded-3xl">
        <header class="flex justify-center items-center py-5 gap-5 bg-fuchsia-400 rounded-t-md">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-black hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>                  
            </a>
            <h1 class="text-2xl">01 - class</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php
                class Vehicle {
                    //Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;
                    // Methods
                    public function setAttributes ($brand, $refer, $model, $color) {
                        $this-> brand = $brand;
                        $this-> refer = $refer;
                        $this-> model = $model;
                        $this-> color = $color;
                    }
                    public function getAttributes() {
                        return "<div class='p-4 mb-4 flex-col ring-1 ring-white/50 rounded-md'>
                                    <p><strong>Brand:</strong> $this->brand</p>
                                    <p><strong>Refer:</strong> $this->refer</p>
                                    <p><strong>Model:</strong> $this->model</p>
                                    <p><strong>Color:</strong> $this->color</p>
                                </div>";
                    }
                }
                $vehicle1 = new Vehicle;
                $vehicle1->setAttributes('Volkswagen', 'Tiguan', 2023, 'Black');
                echo $vehicle1->getAttributes();

                $vehicle2 = new Vehicle;
                $vehicle2->setAttributes('Mazda', 'Tiguan', 2023, 'Black');
                echo $vehicle2->getAttributes();

                $vehicle3 = new Vehicle;
                $vehicle3->setAttributes('Ford', 'Tiguan', 2023, 'Black');
                echo $vehicle3->getAttributes();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>