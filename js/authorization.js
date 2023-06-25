let showForm = false;
$(".registration-btn").on("click",()=>{
  if(showForm){
     $(".authorization").css("display", "flex")
     $(".registration").css("display", "none") 
  }else{
    $(".authorization").css("display", "none")
    $(".registration").css("display", "flex") 
  }
  showForm = !showForm
})