const banco = require('mysql');
const conn =  banco.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "pi2_escola"
});

conn.connect(function(error){
    if(!error){
        conn.query("SELECT * FROM aluno", function(erro, result, fields){
            if (!erro){
                console.log(result);
            }
            else{
                console.log(erro);
            }
        });
    }
    else {
        console.log(error);
    }
});