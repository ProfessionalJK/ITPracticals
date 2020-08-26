age=as.numeric(readline("Enter age"))
gender=readline("Enter Gender")
if(age>=60 && gender=="M"){
  print("Available for Concession")
}else if(age>=45 && gender=="F"){
  print("Available for Concession");
}else{
  print("Noot avaialable for Concession")
}