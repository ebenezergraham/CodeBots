
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCqxbTGcnPG7diw04kjAmcCBdr8P5WBeGw",
    authDomain: "mur-webcup2018.firebaseapp.com",
    databaseURL: "https://mur-webcup2018.firebaseio.com",
    projectId: "mur-webcup2018",
    storageBucket: "mur-webcup2018.appspot.com",
    messagingSenderId: "781715435469"
  };
  firebase.initializeApp(config);

  //Get DOM Elements
  const txtEmail = document.querySelector("#form-username");
  const txtPassword = document.querySelector("#form-password");
  const btnSignin = document.querySelector("#signin");

  //Add login  event listener
  btnSignin.addEventListener('click', e => {
    //Get Email and password values
    const emai = txtEmail.value;
    const password = txtPassword.value;
    const auth = firebase.auth;

    const promise = auth.signInWithEmailAndPassword(email, password);
    promise.catch(e => console.log(e.message));
  });
