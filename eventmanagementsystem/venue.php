<?php 
include 'admin/db_connect.php'; 
?>
<style>
*{
    font-family: "Poppins";

}
]
body{
    font-family: "Poppins";

}

.blurbg1{
    background: url('admin/assets/img/blurbg1.jpg');
    background-attachment: cover;
    object-fit: cover;

}

        html::-webkit-scrollbar {
          width: 1rem;
          z-index: 1000;
        }

        html::-webkit-scrollbar-track {
          background: transparent;
          z-index: 1000;
        }

        html::-webkit-scrollbar-thumb {
          background: #262F3D;
          z-index: 1000;
         /* border-radius: 5rem;*/
        }
        

#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.venue-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.venue-list .carousel,.venue-list .card-body {
    width: calc(50%)
}
.venue-list .carousel img.d-block.w-100 {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 15vh !important;
        height: 25vh !important
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.venue-text{
    justify-content: center;
    align-items: center ;
}

</style>
<!--         <header class="masthead">
        </header> -->
        <div class="blurbg1">
            <div class="container-fluid pt-2">
                
                <br><br>
                <h4 class="text-center text-white" style="font-family: 'Poppins'; font-size:50px; text-decoration:underline;" >Events & Promotions!</h4>
                <br><br>
<!--                 <hr class="divider"> -->
                <div class="row-items">
                <div class="col-lg-15">
                    <div class="row">
                <?php
                $rtl ='rtl';
                $ci= 0;
                $venue = $conn->query("SELECT * from venue order by rand()");
                while($row = $venue->fetch_assoc()):
                   
                    $ci++;
                    if($ci < 3){
                        $rtl = '';
                    }else{
                        $rtl = 'rtl';
                    }
                    if($ci == 4){
                        $ci = 0;
                    }
                ?>
                <div class="col-md-6">
                <div class="card venue-list <?php echo $rtl ?>" data-id="<?php echo $row['id'] ?>">

                        <div id="imagesCarousel_<?php echo $row['id'] ?> card-img-top " class="carousel slide" data-ride="carousel">
                            <?php ?>
                              <div class="carousel-inner">
                              
                                    <?php 
                                        $images = array();
                                        $fpath = 'admin/assets/uploads/venue_'.$row['id'];
                                        $images= scandir($fpath);
                                        $i = 1;
                                        foreach($images as $k => $v):
                                            if(!in_array($v,array('.','..'))):
                                                $active = $i == 1 ? 'active' : '';
                                            
                                    ?>
                                         <div class="carousel-item <?php echo $active ?>">
                                          <img class="d-block w-100" src="<?php echo $fpath.'/'.$v ?>" alt="">
                                        </div>
                                    <?php
                                            $i++;
                                            else:
                                                unset($images[$v]);
                                            endif;
                                        endforeach;
                                    ?>
                                     <a class="carousel-control-prev" href="#imagesCarousel_<?php echo $row['id'] ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#imagesCarousel_<?php echo $row['id'] ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                        </div>
                                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <div>
                                    <h3><b class="filter-txt"><?php echo ucwords($row['venue']) ?></b></h3>
                                    <small><i><?php echo $row['address'] ?></i></small>
                                </div>
                                <div>
                                <span class="truncate" style="font-size: inherit; font-family: 'Poppins';"><small><?php echo ucwords($row['description']) ?></small></span>
                                    <br>
    <!--                             <span class="badge badge-secondary"><i class="fa fa-tag"></i> Rate Per Hour: <?php echo number_format($row['rate'],2) ?></span> -->
                                <br>
                                <br>
                                <button class="btn btn-primary book-venue align-self-end" type="button" style="font-family:'Poppins'" data-id='<?php echo $row['id'] ?>'>View</button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </div>
            <br><br>
        </div>


<script>
    // $('.card.venue-list').click(function(){
    //     location.href = "index.php?page=view_venue&id="+$(this).attr('data-id')
    // })
    $('.book-venue').click(function(){
        uni_modal("Fill The Form Now To Get Notification","booking.php?venue_id="+$(this).attr('data-id'))
    })
    $('.venue-list .carousel img').click(function(){
        viewer_modal($(this).attr('src'))
    })

</script>