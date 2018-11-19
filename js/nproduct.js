var formnew = document.getElementById('form-new');
var answer = document.getElementById('answer');

formnew.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formnew);

    fetch('../php/post.php',{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        
        .then( data => {
            if(data === 'error'){
                answer.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Oops! Something went wrong!
                </div>
                `
            }else{
                answer.innerHTML = `
                <div class="alert alert-success" role="alert">
                    Data sent correctly!
                </div>
                `
            }
        } )
})