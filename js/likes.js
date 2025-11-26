


   
const posts = document.querySelectorAll('.post_window');

posts.forEach(post => {

    const postId = post.dataset.postId; 
    const thumbUp = post.querySelector('.icon-button-like');
    const thumbDown = post.querySelector('.icon-button-dislike');
    const iconButton_0 = post.querySelector('.counter_0');
    const iconButton_1 = post.querySelector('.counter_1');

    let count_0 = 0;
    let count_1 = 0;

    thumbUp.addEventListener('click', () => {

        
       
        iconButton_0.textContent = ++count_0;

        const dataToSend = {
            id_posta: postId, // Użyj zmiennej postId
            action: 'like'
        };



        fetch('like.php',{

           "method":"POST",
           'headers':{
               'Content-Type': 'application/json',
        'Accept': 'application/json' 

           },


           body:JSON.stringify(dataToSend)
           
           
           
         



    })  
           .then(response=>response.json())
           .then(data=>console.log(data))
           .catch(err=>console.log('error',err))








    });

    thumbDown.addEventListener('click', () => {
        iconButton_1.textContent = ++count_1;

         
       const dataToSend= {

        id_posta:postId,
        action:'dislike'

       }

       
       fetch('like.php',{


                 "method":"POST",
                 "headers":{

                    "Content-Type": "application/json",
                    "Accept":'application/json'

                 },

            body:JSON.stringify(dataToSend)
           


       }) .then(response=>response.json())
           .then(data=>console.log(data))
           .catch(err=>console.log('error',err))









    });

});



















