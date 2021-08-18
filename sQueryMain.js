


  $('#searchUser').on('keypress', function(e){
   
    if(e.which == 13) {

      $(".profile").empty();
        let name = e.target.value;
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
        <input class="button" style="margin-left:20px;" type="button" id=${repo.ID} value="DELETE"/>
         <button style="margin-left:20px;" class="button" id=${b} value="UPDATE"><a  href="formUpdateArticles.php" style="color:white">Update Article</a></button>
<a  class="button" href="homePage.php" style="margin-left:800px;">Back</a>
     </main> 


        `)

$(res).click(function(){


// alert(document.getElementById(repo.ID).value);
//alert("."+repo.ID);
  $.ajax({
        url:"darticles.php?q="+repo.ID,
        
        success: function(data) {
          

    alert(data); // apple
        }
      })
})

$("#"+b).click(function(){


//alert("inside update");
var c = b-100000000000;
 $.ajax({
        url:"sessionSetter.php?q="+c,
        
      
      })
  //alert(c);

})


 })


        }

    })


});



})
    
        }

      })
    }



  })
function refresh(){
   $.ajax({
        url:"hPage.php",
        data:{
         'offset':offset,
         'total':total
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
var a = parseInt(repo.ID);
var b = a + 100000000000;

$(".profile").append(`
        <main>
        <br>
        <br>
    <span id="info"></span><br><br>
       <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
        <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
        <br><br>
        <a  class="button" href="mainPage.php" style="margin-left:800px;">Back</a>
     </main> 


        `)

$(res).click(function(){


// alert(document.getElementById(repo.ID).value);
//alert("."+repo.ID);
  $.ajax({
        url:"darticles.php?q="+repo.ID,
        
        success: function(data) {
     if(data.includes("Success")){
          //Alert.render(response);
        //  window.location.replace('homePage.php');

        $("#info").empty();
  $("#info").append(`
       <b style="color:green;">**Success!</b>
     
        `)
      setTimeout(function(){window.location.replace('homePage.php');}, 2000);
        }      
if(data.includes("Failed")){
  $("#info").empty();
  $("#info").append(`<b style="color:red;">**failed</b>`);
  document.getElementById('userr').style.borderColor = "red";
}
    //alert(data); // apple
        }
      })
})

$("#"+b).click(function(){


//alert("inside update");
var c = b-100000000000;
 $.ajax({
        url:"sessionSetter.php?q="+c,
        
      
      })
  //alert(c);

})


 })


        }

    })


});



})
  

} // success ends here


    })

}
refresh();
