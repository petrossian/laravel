if(document.querySelector('.collapsed') !== null){
    document.querySelector('.collapsed').addEventListener('click', ()=>{
        $('html,body').animate({scrollTop: document.body.scrollHeight});
    });
}

let end;
if(document.getElementsByClassName('paginate_nav')[0] !== null){
    end = document.getElementsByClassName('paginate_nav')[0].getAttribute('id');
    for(let i = 11; i <= end; i++){
        document.getElementById(""+i).style.display = "none";
    }
}

$(document).ready(()=>{
    let id;
   
    if(localStorage.getItem('id') == undefined){
        id = 9;
    }else{
        id = parseInt(localStorage.getItem('id'));
    }
    localStorage.removeItem('id');
    document.getElementById(id).style.display = "block";
    document.getElementById(id).innerHTML =  `<a class="page-link" href="/posts/?page=${id}">${id}</a>`;
    
    document.getElementById(id+1).style.display = "block";
    let lies = document.getElementsByClassName('pg-link');

    for(let i = 0; i<lies.length; i++){
        lies[i].innerHTML = `<a class="page-link" href="/posts/?page=${i+1}">${i+1}</a>`;
    }
    
    document.getElementById(id+1).innerHTML = `<a class='page-link'>...</a>`;
    if(id > 9){
        document.getElementById(id-1).style.display = "block";
        document.getElementById(id-1).innerHTML =  `<a class='page-link'>...</a>`;
    }

    $('#' + id + '>a').click((e)=>{
        localStorage.removeItem('id');
        localStorage.setItem('id', id+1);
    });

});

