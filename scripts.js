/*

I have commented out the below ES6 for now while I try to figure out a way to install the right packages
for bundling and minifying JS. The below classes do have their own modular files and I will delete
the below classes and keep the modular files once I have figured a way to make the JS bundling work,
most likely by modifying my gulp file, finding the right npm packages or by using webpack.

import RecentWorks from '/js/recentworks.js';
import LoadingScreen from '/js/loadingscreen.js';
import Navbar from '/js/navbar.js';

var loadingScreen = new LoadingScreen();


var navbar = new Navbar();


if(location.pathname === '/' || location.pathname === '/index.html'){

  var recentWorks = new RecentWorks();
  document.querySelector('footer').style.display = 'none';

}
*/



//---------------------------------------------------------------------------------------------------------------

class Navbar{

  constructor(){

    this.toggler = document.querySelector('.navbar-toggler');
    this.events();

  }

  events(){

    var toggle = false;

    this.toggler.addEventListener('click', function(){

      if(!toggle){

      //document.querySelector('.navbar-toggle-background-overlay').style.opacity = "1";
      //document.querySelector('#body').style.overflow = "hidden";
      toggle = true;

    } else {

      //document.querySelector('.navbar-toggle-background-overlay').style.opacity = "0";
      //document.querySelector('#body').style.overflow = "scroll";
      toggle = false;

    }

    });

  }

  //Methods




}


class LoadingScreen{

  //1. State

  constructor(){

    this.page = document.getElementById('body');
    this.loadingScreen = document.querySelector('.loading-screen');
    this.navbar = document.querySelector('.navbar');
    this.showcase = document.querySelector('.showcase');
    this.events();
    this.start();

  }

  //2. Events

  events(){

    this.navbar.addEventListener('click', this.start.bind(this));
    document.querySelector('.loading-screen').style.transition = "0s";
    document.querySelector('.loading-screen').style.background = "#1C1C1C";

  }

  //3. Methods

  start(){

    var change = this; //Make the data of 'this' passable to other methods

    function scrollUp(callback){

        setTimeout(function(){

          window.scrollTo(0, 0);

        }, 100);

        callback();

    }


    function load(){

    setTimeout(function(){

      /******************************************************************************

      The context of 'this' does not autmatically get passed from start() to
      the callback. Find a way to pass 'this' to the callback as an argument.

      *******************************************************************************/


      change.page.style.overflow = "scroll";
      change.loadingScreen.style.opacity = "0";
      change.navbar.style.visibility = "visible";

      if(location.pathname === "/projects/"){

      change.loadingScreen.style.opacity = "0.3";
      document.querySelector('.loading-screen svg').style.position = "fixed";
      document.querySelector('.loading-screen').style.background = "none";
      document.querySelector('.circle-caption').textContent = "";
      document.querySelector('#portfolio-list .container').style.visibility = "visible";

      }

      if(
      location.pathname === "/"
      || location.pathname === "/projects/"
      || location.pathname === "/team/"
      || location.pathname === "/vision/"
      || location.pathname === "/contact/"){

        change.showcase.style.opacity = "1";

      }

      /*if(location.pathname === "rigelcreative.co.uk/projects/"){

        change.loadingScreen.style.opacity = "0.3";
        document.querySelector('.company-title').textContent = "";
        document.querySelector('.loading-screen').style.background = "none";
        document.querySelector('.loading-screen').style.zIndex = "0";
        document.querySelector('.loading-screen svg').style.position = "fixed";
        document.querySelector('#portfolio-list .container').style.visibility = "visible";

      }*/


    }, 3500);


    }

    scrollUp(load);


  }



}

class RecentWorks{

//1. State

constructor(){

  this.previousButton = document.querySelector('.previous');
  this.nextButton = document.querySelector('.next');
  this.projectName = document.querySelector('#project-name');
  this.project1 = document.querySelector('#project-1');
  this.project2 = document.querySelector('#project-2');
  this.project3 = document.querySelector('#project-3');
  this.project4 = document.querySelector('#project-4');
  this.project5 = document.querySelector('#project-5');
  this.dot1 = document.querySelector('#dot-1');
  this.dot2 = document.querySelector('#dot-2');
  this.dot3 = document.querySelector('#dot-3');
  this.dot4 = document.querySelector('#dot-4');
  this.dot5 = document.querySelector('#dot-5');
  this.currentlyShowing = 0;
  this.currentStyle = window.getComputedStyle(this.project1);
  this.projects = [
  {
    name: 'Megalife',
    image: './img/featured-work-1.jpeg'

  },
  {
    name: 'Sapphire Resort',
    image: './img/featured-work-2.jpeg'

  },
  {
    name: 'Jameson Solicitors',
    image: './img/featured-work-3.jpeg'

  },
  {
    name: 'Bench Clothing',
    image: './img/featured-work-4.jpeg'

  },
  {
    name: 'Coca Cola',
    image: './img/featured-work-5.jpeg'

  }];

  this.events();

  /*

  Get current CSS properties of element with getComputedStyle.
  getComputedStyle returns an object of up-to-date styles. 'style.xyz' is mainly used to refer to inline CSS style

  */


}

//2. Events

events(){

  this.previousButton.addEventListener('click', this.showPrevious.bind(this));
  this.nextButton.addEventListener('click', this.showNext.bind(this));

}

//3. Methods

changeImage(){

  switch (this.currentlyShowing) {

    case 0:

      //change image here by setting the opacity to 1 for project2 and 0 for the rest
      this.project1.style.opacity = "1";
      this.project2.style.opacity = "0";
      this.project3.style.opacity = "0";
      this.project4.style.opacity = "0";
      this.project5.style.opacity = "0";
      this.projectName.innerHTML = this.projects[0].name;
      this.dot1.classList.add("active");
      this.dot2.classList.remove("active");


      break;

    case 1:

      //change image here by setting the opacity to 1 for the newly viewed project and 0 for the previous projects
      this.project1.style.opacity = "0";
      this.project2.style.opacity = "1";
      this.project3.style.opacity = "0";
      this.project4.style.opacity = "0";
      this.project5.style.opacity = "0";
      this.projectName.innerHTML = this.projects[1].name;
      this.dot2.classList.add("active");
      this.dot1.classList.remove("active");
      this.dot3.classList.remove("active");
      break;

    case 2:

      this.project1.style.opacity = "0";
      this.project2.style.opacity = "0";
      this.project3.style.opacity = "1";
      this.project4.style.opacity = "0";
      this.project5.style.opacity = "0";
      this.projectName.innerHTML = this.projects[2].name;
      this.dot3.classList.add("active");
      this.dot2.classList.remove("active");
      this.dot4.classList.remove("active");
      break;

    case 3:

      this.project1.style.opacity = "0";
      this.project2.style.opacity = "0";
      this.project3.style.opacity = "0";
      this.project4.style.opacity = "1";
      this.project5.style.opacity = "0";
      this.projectName.innerHTML = this.projects[3].name;
      this.dot4.classList.add("active");
      this.dot3.classList.remove("active");
      this.dot5.classList.remove("active");
      break;

    case 4:

      this.project1.style.opacity = "0";
      this.project2.style.opacity = "0";
      this.project3.style.opacity = "0";
      this.project4.style.opacity = "0";
      this.project5.style.opacity = "1";
      this.projectName.innerHTML = this.projects[4].name;
      this.dot5.classList.add("active");
      this.dot4.classList.remove("active");

      break;

    default:

  }


}

showPrevious(){

  if(this.currentlyShowing === 0){



  } else {

    this.currentlyShowing--;

    this.changeImage();

  }

}

showNext(){

  if(this.currentlyShowing >= this.projects.length - 1){


  } else {

    this.currentlyShowing++;
    this.changeImage();

  }


}


}


var loadingScreen = new LoadingScreen();
var navbar = new Navbar();
var recentWorks = new RecentWorks();

if(location.pathname === "/"){

  document.querySelector('footer').style.display = 'none';

}

console.log('test');

//^^ Add above if block to footer module, footer.js
