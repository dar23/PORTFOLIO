const menu_items = document.querySelectorAll('li');

menu_items.forEach(function(item) {
    const link = item.querySelector('a');
    

    item.addEventListener('mouseover', function() {
        
        link.style.fontWeight = '500';
        
    });

    item.addEventListener('mouseout', function() {
        
        link.style.fontWeight = '400';
       
    });
});