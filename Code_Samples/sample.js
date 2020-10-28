var x = 10;
// Here x is 10
console.log(x)
{
  let x = 2;
  // Here x is 2
console.log(x)

}
// Here x is 10
console.log(x)

var x, y, z;       // Declare Variables
x = 5; y = 6;      // Assign Values
z = x + y;         // Compute Values

// objects
var car = {type:"Fiat", model:"500", color:"white"};

var person = {
  firstName: "John",
  lastName : "Doe",
  id       : 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};
name = person.fullName()
console.log(name)


var books = {
  book_1 : {
    title : "book_1",
    genre : "genre",
    pages : 250,
    description : "description",
    summary : "summary",
    author : "author name",
  },
  book_2 : {
    title : "book_2",
    genre : "genre",
    pages : 300,
    description : "description",
    summary : "summary",
    author : "author name"
  }
};

console.log(books.book_1.title)
console.log(books.book_2.pages)

const PERSON = "Is a person";
const ESCAPE = "An escaped character! -> \\ \' \n";



function greeting(x){
  console.log("Hello " + x);
}
greeting(John);
