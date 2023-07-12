// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyClknweVKXCUP-dpumF8ySrvQu6TBYGHcs",
  authDomain: "moviehallhub-5be63.firebaseapp.com",
  projectId: "moviehallhub-5be63",
  storageBucket: "moviehallhub-5be63.appspot.com",
  messagingSenderId: "42968964428",
  appId: "1:42968964428:web:b30d3825f1a50fd6dbc3e9",
  measurementId: "G-MGCRF3N36T"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

// Get a reference to the database service
const database = firebase.database();

// Register form submission event
const registrationForm = document.getElementById('registration-form');
registrationForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent form submission

  // Get user input values
  const username = document.getElementById('username').value;
  const location = document.getElementById('location').value;
  const contact = document.getElementById('contact').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Create user object
  const user = {
    username,
    location,
    contact,
    email,
    password
  };

  // Save user data to Firebase database
  database.ref('users').push(user)
    .then(() => {
      alert('Registration successful!');
      registrationForm.reset();
    })
    .catch((error) => {
      alert('Registration failed. Please try again.');
      console.error(error);
    });
});
