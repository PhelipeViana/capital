var firebaseConfig = {

 apiKey: "AIzaSyCKScw8gGoGss2DBIv8abKmAq1dfQT-naY",
 authDomain: "inicial-5b060.firebaseapp.com",
 databaseURL: "https://inicial-5b060.firebaseio.com",
 projectId: "inicial-5b060",
 storageBucket: "inicial-5b060.appspot.com",
 messagingSenderId: "1064871169137",
 appId: "1:1064871169137:web:4747976351cbb1c417dfd0",
 measurementId: "G-3RBRTWJ26E"
};
firebase.initializeApp(firebaseConfig);
firebase.analytics();

/*
alternativa2020
alternativapvh@gmail.com
                
*/ 

const fireFunction={
  anonimoLogin:function(){
    firebase.auth().signInAnonymously().catch(function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log(errorMessage);
      
    });

  },
  statusLogin:function(){

    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
          var isAnonymous = user.isAnonymous;//true
          var uid = user.uid;//chava
          //console.log(uid);
          console.log('logado')
        } else {
          console.log('deslogado!');
        }

      });
  },
  arquivo:function(files,barra,form_input,destino,btn=0){
    let file1=document.getElementById(files);
    let progre1=document.getElementById(barra);
    let campo_input=document.getElementById(form_input);
    
    file1.onchange=function(e){

      let caminho;
      let enviando;
      let file1;
      let carregar;

      let a=Math.floor(Math.random() * 999 + 1);
      let b=Math.floor(Math.random() * 999 + 1);
      
      
      let rp=a+"_"+b;

      file1=e.target.files[0];
      let tipo_nome=file1.name;
      let posicao=tipo_nome.lastIndexOf(".");
      let ext=tipo_nome.substring(posicao);

      let PERMITIDO=['.png','.jpg','.jpeg','.pdf'];
      let validador=PERMITIDO.indexOf(ext);

      if (validador > -1) {
        caminho=firebase.storage().ref(destino+"/").child(rp+tipo_nome);
        enviando=caminho.put(file1);

        enviando.on('state_changed', function(data){
          carregar=(data.bytesTransferred/data.totalBytes)*100;
          progre1.value=carregar;
          caminho.getDownloadURL().then(function(url){

           campo_input.value=url;
          // console.log(url)
         });
          if (carregar==100) {
            alert('Documento anexado!');

            if (btn!==0) {
              $("#"+btn).prop('disabled',false);

            }

          }

        })

      }else{
        alert('Formato não permitido!');
        file1.value="";
      }
    }
  }
}

