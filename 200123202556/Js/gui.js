function decodeText(){
    var text = document.getElementsByClassName('decode-text')[0];
    // debug with
    // console.log(text);
    // console.log(text.children.length);
  
    // assign the placeholder array its places
    var state = [];
    for(var i = 0, j = text.children.length; i < j; i++ ){
        text.children[i].classList.remove('state-1','state-2','state-3');
        state[i] = i;
    }
  
    // shuffle the array to get new sequences each time
    var shuffled = shuffle(state);
  
    for(var i = 0, j = shuffled.length; i < j; i++ ){
        var child = text.children[shuffled[i]];
        classes = child.classList;
  
        // fire the first one at random times
        var state1Time = Math.round( Math.random() * (2000 - 300) ) + 50;
        if(classes.contains('text-animation')){ 
            setTimeout(firstStages.bind(null, child), state1Time);
        }
    }
  }
  
  // send the node for later .state changes
  function firstStages(child){
    if( child.classList.contains('state-2') ){   
        child.classList.add('state-3');
    } else if( child.classList.contains('state-1') ){
        child.classList.add('state-2')
    } else if( !child.classList.contains('state-1') ){
        child.classList.add('state-1');
        setTimeout(secondStages.bind(null, child), 100);
    }    
  }
  function secondStages(child){
    if( child.classList.contains('state-1') ){
        child.classList.add('state-2')
        setTimeout(thirdStages.bind(null, child), 100);
    } 
    else if( !child.classList.contains('state-1') )
    {
        child.classList.add('state-1')
    }
  }
  function thirdStages(child){
    if( child.classList.contains('state-2') ){
        child.classList.add('state-3')
    }
  
  }
  
  function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
  
        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
  }
  
  
  // Demo only stuff
  decodeText();
  
  // beware: refresh button can overlap this timer and cause state mixups
  setInterval(function(){ decodeText(); }, 10000);
  
  // //////////////////////
  
  var speed = 10;
  
  /* Call this function with a string containing the ID name to
  * the element containing the number you want to do a count animation on.*/
  function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
  }
  
  /*A recursive function to increase the number.*/
  function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 1, endNbr, elt);
    }, speed);
  }
  }
  
  /*Function called on button click*/
  function incNbr(){
  incEltNbr("nbr");
  incEltNbr("nbr1");
  incEltNbr("nbr2");
  incEltNbr("nbr3");
  incEltNbr("nbr4");
  }
  
  incEltNbr("nbr");
  incEltNbr("nbr1");
  incEltNbr("nbr2");
  incEltNbr("nbr3"); 
  incEltNbr("nbr4");/*Call this funtion with the ID-name for that element to increase the number within*/
  
  // ///////////////////////////////////////
  // Product Preview
  // Based in: http://drbl.in/lvCB
  // Fork in Github: https://github.com/itbruno/productpreview
  // Twitter: @_brunoweb
  
  // ///////////////////////////