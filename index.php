<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style>
            *{
                font-family: 'poppins';
            }
        </style>
    </head>
<body class="min-h-screen w-full shadow shadow-lg shadow-black ">
    <?php include("header.php") ?>
    <!-- Banner Image -->    
    <div class=" mt-20  p-5 h-11/12  bg-container  w-full flex justify-end " >
        <style>
            .bg-container{
                background-image:  url('https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/web_banner_v6_21_11zon.webp');
                background-size: cover;
            }
            input{
                background-color: #EDEDED;
                padding: 10px;
                border-radius: 5px;
                color: black;
            }
            input::placeholder{
                color: black;
            }
            input:focus{
                outline: none;
                border: none;
            }
            th,tr{
                text-align: center;
            }
            th{
                color: white;
            }

        </style>

            <!-- Form -->
        <form method="GET" action="formController.php" class=" bg-white    space-y-5   flex flex-col  justify-start items-center   p-5 rounded-3xl border-none outline-none ">
        <h2 style="color: #A65FA2;" class="text-#a749a2 self-center  text-2xl font-bold">Book Your Biopsy Test</h2>
        <input type="text" name="name"  placeholder="name" />
        <input type="email" name="email" placeholder="Email ID" />
        <input type="text" name="number" placeholder="Phone Number" />
        <input type="text" name="city" placeholder="City" />
        <div class="w-full  flex justify-center items-center">
            <button  type="submit" name="save" style="background-color: #A65FA2;" class="flex  text-white pl-3 pr-3 pt-1 pb-1 border-none outline-none cursor-pointer rounded-md justify-center items-center">SUBMIT</button>
        </div>
        </form>


    </div>
    <!-- Table -->
    <main class=" p-8 mt-10  space-y-24 flex flex-col justify-center items-center">

        <div class=" space-y-10">
            <h2 class="text-center text-3xl font-semibold " style=" color: #A65FA2;">EXplore Our Comprhensive Biopsy Options and Pricing</h2>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                <table >
                    <tr class="border-b " style="background-color: #A65FA2;">
                        <th class=" border-r  border-black">Biopsy Type</th>
                        <th>Approximate Range</th>
                    </tr>
                    <tr class="border-b ">
                        <td class=" border-r p-2 border-b border-black">Fine Neddle Aspiration</td>
                        <td class="border-b p-2 border-black">Rs.2000/- to Rs. 10,000/-</td>
                    </tr>
                    <tr class="border-b ">
                        <td class=" border-r  p-2 border-b border-black">Fine Neddle Aspiration</td>
                        <td style=" color: #A65FA2;" class="border-b p-2 border-black">Rs.2000/- to Rs. 10,000/-</td>
                    </tr>
                    <tr class="border-b ">
                        <td class=" border-r p-2 border-b border-black">Fine Neddle Aspiration</td>
                        <td class="border-b p-2 border-black">Rs.2000/- to Rs. 10,000/-</td>
                    </tr>
                    <tr class="border-b ">
                        <td class=" border-r p-2 border-black">Fine Neddle Aspiration</td>
                        <td class="p-2">Rs.2000/- to Rs. 10,000/-</td>
                    </tr>
                </table>

                <div class=" space-y-3 font-medium" style="  color: #6c757d;">
                    <p>Biopsy Services at Cion Cancer Clinics: Affordable Pricing, Accurate Results.</p>
                    <p>We guarantee you the best price in the market. You can trust that you're getting the highest quality at the most competitive rates. We put transparency first.</p>
                    <p>Wondering about costs?</p>
                    <p>Your Cost Estimate is just a click away.</p>
                    <button class=" font-semibold text-white border-none outline-none cursor-pointer rounded-md pt-2 pb-2 pl-4 pr-4" style="background-color: #A65FA2;">Call Now </button>
                </div>
            </div>

        </div>

        <div class="  bg-white w-8/12" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">

            
            <!-- Types of Biopsy -->
            <h3 class="text-center text-3xl font-bold mt-10" style=" color: #A65FA2;">Types of We Treat</h3>
            <!-- Types of Cars -->
            <?php 
                $array = array(
                    array("id" => 1, "title" => "Liver Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
                    array("id"=> 2, "title"=> "Endometrial Biopsy", "url"=> "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/endometrial_biopsy_10_11zon.webp"),
                    array("id" => 1, "title" => "Mouth Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/mouth_biopsy_16_11zon.webp"),
                    array("id"=> 2, "title"=> "Breast Biopsy", "url"=> "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/breast_biopsy_9_11zon.webp"),
                    array("id" => 1, "title" => "Ovarian Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
                    array("id"=> 2, "title"=> "Lung Biopsy", "url"=> "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
                    array("id" => 1, "title" => "Kidney Biopsy", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
                    array("id"=> 2, "title"=> "Bone Marrow Biopsy", "url"=> "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"),
                    array("id" => 1, "title" => "Other Biopsies", "url" => "https://www.cioncancerclinics.com/biopsy-test-hyderabad/assets/img/v2/lung_biopsy_14_11zon.webp"), 
                );
            ?>
            <!-- Card Data -->
            <div class="flex flex-wrap justify-center items-center gap-8 p-3 ">
                <?php
                    foreach($array as $each){
                        echo "<div class=' space-y-5 flex  flex-col justify-center items-center'>";
                        echo "<img src='" . $each['url'] ."' class=' h-24 w-24' />";
                        echo "<p class=' text-center text-sm font-normal' style='color : #50525;'> " . $each['title'] . "</p>";
                        echo "</div>";
                    };
                ?>
            </div> 

        </div>

    </main>

</body>
</html>
