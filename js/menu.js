const menu_items = document.querySelectorAll('li');

menu_items.forEach(function(item) {
    const link = item.querySelector('a');
    const icon= item.querySelector('span');
    

    item.addEventListener('mouseover', function() {
        
      
      link.style.color="rgba(6, 100, 183, 1)";
         icon.style.color="rgba(6, 100, 183, 1)";
           link.style.fontSize="20px";
        
    });

    item.addEventListener('mouseout', function() {
        
      
     link.style.color=" rgb(44, 44, 44)"; 
       icon.style.color="rgb(44, 44, 44)";
        link.style.fontSize="20px";
    });
}); 