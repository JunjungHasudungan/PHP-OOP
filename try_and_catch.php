<?php


    function display($number)
    {
        $i = 1;
        try{ // akan dieksekusi bila tidak ada error
            if($number <= $i) // jika nilai parameter < 1
            {
                throw new Exception("nilai dibawah", $i ); // melemparkan class dengan peringatan
            }else{ //
                for($i; $i <= $number; $i++)
                {
                    echo " $i helo <br/>";
                }
            }
        }catch(Exception $e) // menangkap nilai inputan yang error dan akan melemparkan ke throw new Exception
        {
            echo "maaf ". $e->getMessage();
        }
    }

display(number: -1);