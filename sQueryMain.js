$(document).ready(function(){
 

$('#searchUser').on('keypress', function(e){
   
    if(e.which == 13) {
let name = e.target.value;
if(name!=" "){


      $(".profile").empty();
        
        
        $.ajax({
        url:"searchPage.php?q="+name,
        success: function(data) {

          //alert(data);

         var obj =JSON.parse(data)
          const myJSON = JSON.stringify(obj);



    //alert(myJSON); // apple
 $.each(obj, function(index, repo){
  //alert(JSON.stringify(repo));


$(".profile").append(`
        <main>
        <br>
        <br>
    
    <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
       <br><br>
       <input class="button" style="margin-left:20px;" type="button" id=${repo.ID} value="VIEW DETAILS"/>

</main>

        `)


 })

 

$.each(obj, function(index, repo){
  let str1 = "#";
let str2 = repo.ID.toString();

let res = str1.concat(str2)

//alert(res);

$(res).click(function(){
 // alert("The no was clicked."+str2);


$(".profile").empty();

$.ajax({
        url:"retreiveDesc.php?q="+repo.ID,
        
        success: function(data) {
          // alert(data);

        var obj =JSON.parse(data)
          const myJSON = JSON.stringify(obj);

    //alert(myJSON); // apple
 $.each(obj, function(index, repo){
  //alert(JSON.stringify(repo));
var a = parseInt(repo.ID);
var b = a + 100000000000;

$(".profile").append(`
        <main>
        <br>
        <br>
    
       <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
        <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
        <br><br>
        
<a  class="button" href="mainPage.php" style="margin-left:0px;">Back</a>
     </main> 


        `)






 })


        }

    })


});



})
    
        }

      })
      }
    }



  })

 // QUERY HPAGE

   $.ajax({
        url:"hPage.php",
        data:{
         
        },
        success: function(data) {
          var obj =JSON.parse(data)
          const myJSON = JSON.stringify(obj);



    //alert(myJSON); // apple
 $.each(obj, function(index, repo){
  //alert(JSON.stringify(repo));


$(".profile").append(`
        <main>
        <br>
        <br>
    
    <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
       <br><br>
       <input class="button" style="margin-left:20px;" type="button" id=${repo.ID} value="VIEW DETAILS"/>
      

</main>

        `)


 })

 

$.each(obj, function(index, repo){
  let str1 = "#";
let str2 = repo.ID.toString();

let res = str1.concat(str2)

//alert(res);

$(res).click(function(){
 // alert("The no was clicked."+str2);


$(".profile").empty();

$.ajax({
        url:"retreiveDesc.php?q="+repo.ID,
        
        success: function(data) {
          // alert(data);

        var obj =JSON.parse(data)
          const myJSON = JSON.stringify(obj);

    //alert(myJSON); // apple
 $.each(obj, function(index, repo){
  //alert(JSON.stringify(repo));

//alert(b);


$(".profile").append(`
        <main>
        <br>
        <br>
    
       <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
        <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
        
         
<a  class="button" href="mainPage.php">Back</a>
     </main> 


        `)



 })


        }

    })


});



//RESULT CLICK END



})
  

}
    })



})
