const menu_items = document.querySelectorAll('li');

menu_items.forEach(function(item) {
    const link = item.querySelector('a');
    const icon= item.querySelector('span');
    

    item.addEventListener('mouseover', function() {
        
      link.style.transform = "scale(1.4)";
      link.style.color="rgb(2, 150, 195)";
         icon.style.color="rgb(2, 150, 195)";
        
    });

    item.addEventListener('mouseout', function() {
        
       link.style.transform = "scale(1)";
     link.style.color=" rgb(44, 44, 44)"; 
       icon.style.color="rgb(44, 44, 44)";
    });
});