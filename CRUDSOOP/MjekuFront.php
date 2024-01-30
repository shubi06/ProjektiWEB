<?php

class Mjeku {
   
    private $update=false;
    private $id;
    private $titulli;
    private  $eksperienca;
    private $sherbimi;
    private $foto;
    private$product_categories;

  
    public function __construct($row) {
        $this->id = $row['id'];
        $this->titulli = $row['titulli'];
        $this->eksperienca = $row['eksperienca'];
        $this->sherbimi = $row['sherbimi'];
        $this->foto = $row['foto'];
        $this->product_categories = $row['product_categories'];
        
        
    }
   

    public function getId() {
        return $this->id;
    }

    public function getTitulli() {
        return $this->titulli;
    }

    public function getEksperienca() {
        return $this->eksperienca;
    }

    public function getSherbimi() {
        return $this->sherbimi;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getProduct_categories() {
        return $this->product_categories;
    }

   


    public function iPerketKategoris($categoryId) {
        return $this->product_categories == $categoryId;
    }

    
    public function generateProductCard($categoryId = null)
    {
        if ($categoryId === null || $this->iPerketKategoris($categoryId)) {
    
          
               
            
            echo ' <div class="image1">' ;
            echo '<img src="' . $this->getFoto() . '" alt="">';
            echo '</div>';
           echo   '<div class="content2">';
                            
                    echo   '<a href="#">';
                                echo '<span class="title1">'. $this->getTitulli(). '</span>';
                                echo    '</a>';
                           
                               echo '<p class="desc">' . $this->getEksperienca() . '</p>';
                           
                               echo  '<a class="action" href="#">'. $this->getSherbimi() .'</a>';
                               echo    '</div>';
                              
    }
}
}

?>