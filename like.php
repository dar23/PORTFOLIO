<?php


echo '<div class="like_dislike">';

echo '
<form method="post" name="add_one">
    <div class="like-wrapper_0">
        <button type="button" class="icon-button"><i class="fa-solid fa-thumbs-up"></i></button>
        <div class="counter_0">0</div>
    </div>
</form>
';

echo '
<form method="post" name="minus_one">
 <div class="like-wrapper_1">
    <button type="button" class="icon-button"><i class="fa-solid fa-thumbs-down"></i></button>
     <div class="counter_1">0</div>
    </div>
</form>
';

echo '</div>';
















?>




<script>
   
   const thumbUp= document.querySelector('.fa-thumbs-up');
   const thumbDown= document.querySelector('.fa-thumbs-down');
   const iconButton_0=document.querySelector('.counter_0');
    const iconButton_1=document.querySelector('.counter_1');                             
   let count_0= 0;
   let count_1= 0;

thumbUp.addEventListener('click',()=>{

iconButton_0.textContent=++count_0;

});




thumbDown.addEventListener('click',()=>{

iconButton_1.textContent=++count_1;

})



























</script>

