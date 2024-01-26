<?php

class Sherbimet {
   
  private $update=false;
  private  $id;
  private $fotoSh;
  private  $emertim;
  private  $pershkrimi;
//   private $product_categories;

  
    public function __construct($row) {
        $this->id = $row['id'];
        $this->fotoSh = $row['fotoSh'];
        $this->emertim = $row['emertim'];
        $this->pershkrimi = $row['pershkrimi'];
        // $this->product_categories = $row['product_categories'];
        
        
    }
   

    public function getId() {
        return $this->id;
    }

    public function getFotoSh() {
        return $this->fotoSh;
    }

    public function getEmertim() {
        return $this->emertim;
    }

    public function getPershkrimi() {
        return $this->pershkrimi;
    }


    // public function getProduct_categories() {
    //     return $this->product_categories;
    // }

   


    public function iPerketKategoris($categoryId) {
        return $this->id == $categoryId;
    }

    
    public function generateProductCard($categoryId = null)
    {
        if ($categoryId === null || $this->iPerketKategoris($categoryId)) {
    
          
        echo   '<img style="height: 130px; width: 130px;" src="../CRUDS/uploads/"' . $this->getFotoSh(). 'alt="">';
           echo  '<div class="card__content">';
            echo  '<p class="card__title">'. $this->getEmertim() . '</p>';
            echo    '<p class="card__description">' . $this->getEmertim().  '</p>';
            echo '</div>';
            
        //     echo ' <div class="image1">' ;
        //     echo '<img src="ProjektiWEB/CRUDS/uploads/' . $this->getFoto() . '" alt="">';
        //     echo '</div>';
        //    echo   '<div class="content2">';
                            
        //             echo   '<a href="#">';
        //                         echo '<span class="title1">'. $this->getTitulli(). '</span>';
        //                         echo    '</a>';
                           
        //                        echo '<p class="desc">' . $this->getEksperienca() . '</p>';
                           
        //                        echo  '<a class="action" href="#">'. $this->getSherbimi() .'</a>';
        //                        echo    '</div>';
                              
    }
}
}

?>
