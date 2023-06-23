import { initializeApp } from "firebase/app";

const firebaseConfig = {
    apiKey: "AIzaSyDgEYQbRQru8meb_x56nSAtqtBrkpyiv1A",
    authDomain: "gestiss-3ef91.firebaseapp.com",
    projectId: "gestiss-3ef91",
    storageBucket: "gestiss-3ef91.appspot.com",
    messagingSenderId: "390570373905",
    appId: "1:390570373905:web:89f876f727cde8bca312b0",
};

const app = initializeApp(firebaseConfig);
window.appFirebase = app;
