// values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
var i = 0,
    a = 0,
    isBackspacing = false,
    isParagraph = false;

// Typewriter text content. Use a pipe to indicate the start of the second line "|".  
var textArray = [
  " -Мне нужна квартира", 
  '-Сориентируйте, как вообще происходит работа с агентом и сколько стоит?',
  '-Здравствуйте, я звоню по поводу покупки квартиры.',
  '-С кем я могу проконсультироваться по ценам  на покупку квартиры?',
  '-Подскажите, с кем я могу пообщаться  по продаже квартиры?',
  '-Мне нужна консультация по аренде помещения.',
  '-Хочу снять квартиру, подберите мне вариант?',
  '-Хочу продать одну квартиру и купить другую.  Сколько это будет стоить?',
  '-Я хотела бы оценить рыночную стоимость квартиры. С кем я могу поговорить?',
  '-Сколько стоит сопровождение сделки?'
];

// Speed (in milliseconds) of typing.
var speedForward = 5, //Typing Speed
    speedWait = 2000, // Wait between typing and backspacing
    speedBetweenLines = 10, //Wait between first and second lines
    speedBackspace = 10; //Backspace Speed

//Run the loop
typeWriter("output", textArray);

function typeWriter(id, ar) {
  var element = $("#" + id),
      aString = ar[a],
      eHeader = element.children("p"); //Header element
      eParagraph = element.children("p"); //Subheader element
  
  // If full string hasn't yet been typed out, continue typing
  if (i < aString.length && !isBackspacing) {
    eParagraph.text(eParagraph.text() + aString.charAt(i));
    i++;
    setTimeout(function(){ typeWriter(id, ar); }, speedForward);
  } else if (i == aString.length && !isBackspacing) { // If full string has been typed, switch to backspace mode
    isBackspacing = true;
    setTimeout(function(){ typeWriter(id, ar); }, speedWait);
  } else if (isBackspacing) { // If backspacing is enabled
    eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - eParagraph.text().length)); 
    if (eParagraph.text().length === 0) { // When backspacing is completed
      isBackspacing = false;
      a = (a + 1) % ar.length; // Move to the next phrase
      i = 0; // Reset the character counter
      setTimeout(function(){ typeWriter(id, ar); }, speedWait);
    } else {
      setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);
    }
  }
}
