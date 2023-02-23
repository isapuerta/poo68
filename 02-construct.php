<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
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
            <h1 class="text-2xl">02 - Construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php
                class PlayList {
                    // Attributes
                    private $name;
                    private $artist = Array();
                    private $album  = Array();
                    private $cover  = Array();
                    private $year   = Array();
                    // Methods
                    public function __construct($name){
                        $this->name = $name; 
         
                    }
                    public function setPlayList($artist, $album, $cover, $year){
                            $this->artist[] = $artist; 
                            $this->album[]  = $album; 
                            $this->cover[]  = $cover; 
                            $this->year[]   = $year; 
                    }
                    public function getPlayList(){
                        echo "<div class='p-2 ring-1 ring-white/80 rounded-md'>
                                    <h2 class='text-center text-2xl my-4'>$this->name</h2>";
                                    for($i = 0; $i < count($this-> artist); $i++) {
                                    echo "<div class='p-2 mb-4 flex text-white/80 flex-col gap-4 bg-black/40 rounded-md'>
                                    <p><strong> Album: </strong>".$this->album[$i]."</p>
                                    <img class='rounded-md' src='". $this ->cover[$i]. "'alt= 'Cover' widt = '180px' </p>
                                    <p><strong> Artist: </strong>".$this->artist[$i]."</p>
                                    <p><strong> Year: </strong>".$this->year[$i]."</p>
                                    </div>";
                                    }
                                "</div>";
                    }
                }
                $myPlayList = new PlayList('Favorite Music');
                $myPlayList-> setPlayList('Margarita Siempre Viva', 'Un Lugar Más Cierto', 'https://tinyurl.com/yc6vssb9', 2010);
                $myPlayList-> setPlayList('Cigarettes After Sex', 'Cry', 'https://tinyurl.com/cutytccz', 2019);
                $myPlayList-> setPlayList('Gorillaz', 'The Fall', 'https://tinyurl.com/yc67umky', 2010);
                $myPlayList-> setPlayList('Lana Del Rey', 'Born to Die', 'https://tinyurl.com/3wxbe43x', 2012);
                $myPlayList-> setPlayList('Pink Floyd', 'The Wall', 'https://tinyurl.com/mr3h6p7c', 1979);
                $myPlayList-> getPlayList();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>