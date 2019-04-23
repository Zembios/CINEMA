var moviesArray = {
0: {src: "images/mutants.jpg", title: "The New Mutants", desc: "The New Mutants is an upcoming American horror film in the superhero genre, based on the Marvel Comics team of the same name and distributed by Walt Disney Studios Motion Pictures."},
1: {src: "images/cptMarvel.jpg", title: "Captain Marvel", desc: "Captain Marvel is a 2019 American superhero film based on the Marvel Comics character Carol Danvers. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the twenty-first film in the Marvel Cinematic Universe (MCU)."},
2: {src: "images/ts4.png", title: "Toy Story 4", desc: "Toy Story 4 is an upcoming American 3D computer-animated comedy film produced by Pixar Animation Studios for Walt Disney Pictures."},
3: {src: "images/endgame.jpg", title: "Avengers: Endgame", desc: "Avengers: Endgame is an upcoming American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and set for distribution by Walt Disney Studios Motion Pictures."},
4: {src: "images/shazam.jpg", title: "Shazam", desc: "Shazam! is an upcoming American superhero film based on the DC Comics character Captain Marvel (DC Comics).Produced by New Line Cinema, it is intended to be the seventh installment in the DC Extended Universe (DCEU)."},
5: {src: "images/us.jpg", title: "Us", desc: "Us is a 2019 American horror film written and directed by Jordan Peele. The film stars Lupita Nyong'o, Winston Duke, Elisabeth Moss, and Tim Heidecker, and follows a family who are confronted by a group of doppelgängers."},
6: {src: "images/dumbo.jpg", title: "Dumbo", desc: "Dumbo returns and floats to new heights. Tim Burton brings you a spectacular and exciting live action adventure; the story of Dumbo, the flying elephant, continues."},
7: {src: "images/alita.jpg", title: "Alita: Battle Angel", desc: "Alita: Battle Angel is a 2019 American cyberpunk action film based on the 1990s Japanese manga series Gunnm (also known as Battle Angel Alita in the English translation) by Yukito Kishiro. Directed by Robert Rodriguez, the film is written by James Cameron and Laeta Kalogridis, and produced by Cameron and Rosa Salazar stars as the titular heroine Alita, an amnesiac cyborg girl who sets out to learn about her destiny after she awakens in a new body with no past memory of who she is."},
8: {src: "images/httyd.jpg", title: "How To Train Your Dragon: The Hidden World", desc: "When Hiccup discovers Toothless isn't the only Night Fury, he must seek 'The Hidden World', a secret Dragon Utopia before a hired tyrant named Grimmel finds it first."},
9: {src: "images/spiderman.jpg", title: "Spiderman: Far From Home", desc: "Spider-Man: Far From Home is an upcoming American superhero film based on the Marvel Comics character  Spider-Man, produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing."},
};
var indexOfFirstMovie = 0;
var left = "left";
var right = "right";
var newIndex = 0;
var moviesArrayLength = 0;
function countProps() {
  var count = 0;
  for (var p in moviesArray) {
    moviesArray.hasOwnProperty(p);
    count++;
  }
  moviesArrayLength = count;
}

function loadImages(){
  for(var i = 0; i < 5; i++){
    var movieImg = "<img src='" + moviesArray[i]["src"] + "'onclick='loadDescription(" + i + ", $(this).parent())' alt='Movie'>";
    var movieDiv = "<div class='movie'>" + movieImg + "</div>";
    $(movieDiv).append(movieImg);
    $("#rightArr").before(movieDiv);
  }
}

function loadDescription(i, element){
      $(".movie.selectedMovie").removeClass("selectedMovie");
      $(element).addClass("selectedMovie");
      $("#movieTitle").text(moviesArray[i]["title"]);
      $("#movieDesc").text(moviesArray[i]["desc"]);
}

function scrollMovies(direction){
  if(direction == "left"){
    if(indexOfFirstMovie == 0){
      return;
    }
    newIndex = indexOfFirstMovie-1;
    indexOfFirstMovie = indexOfFirstMovie-1;
    prepareMoviesDiv();
    var i = 0;
    while(i < 5){
      var movieImg = "<img id='movie" + newIndex + "' src='" + moviesArray[newIndex]["src"] + "' onclick='loadDescription(" + newIndex + ", $(this).parent())' alt='Movie'>";
      var movieDiv = "<div class='movie'>" + movieImg + "</div>";
      $(movieDiv).append(movieImg);
      $("#rightArr").before(movieDiv);
      i++;
      newIndex++;
    }
  }
  else if(direction = "right"){
    if(indexOfFirstMovie >= moviesArrayLength - 5){
      return;
    }
    newIndex = indexOfFirstMovie+1;
    indexOfFirstMovie = indexOfFirstMovie+1;
    prepareMoviesDiv();
    var i = 0;
    while(i < 5){
      var movieImg = "<img src='" + moviesArray[newIndex]["src"] + "' onclick='loadDescription(" + newIndex + ", $(this).parent())' alt='Movie'>";
      var movieDiv = "<div class='movie'>" + movieImg + "</div>";
      $(movieDiv).append(movieImg);
      $("#rightArr").before(movieDiv);
      i++;
      newIndex++;
    }
  }
}

function prepareMoviesDiv() {
  $(".movies").empty();
  $(".movies").append('<div class="arrows arrLeft" id="leftArr" onclick="scrollMovies(' + "left" + ')">❮</div>');
  $(".movies").append('<div class="arrows arrRight" id="rightArr" onclick="scrollMovies(' + "right" + ')">❯</div>');
}
