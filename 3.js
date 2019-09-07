function  printTriangle(batas) {
    if ((batas > 2) && (batas%2 != 0)) {
        const base = batas+2;
        var triangle = [];

        for (let j = 0; j < batas; j++) {
            var baris = [];
            if (j == 0) {                
                var isi = '* '.repeat(base);
                baris.push(isi);
            } else {
                for (let i = 0; i < base; i++) {  
                    if (i == j) {                        
                        baris[i]='*';
                        baris[base-(i+1)] = '*';
                    } else {
                        if (baris[i] == undefined) {                            
                            baris[i]=' ';
                        }
                    }
                }
            }  
            triangle.push(baris.join(' '));                            
            if (j == Math.floor(base/2)) {
                break;
            }
        }

    } else {
        console.log('Gagal! batas harus ganjil dan > 3');
    }
    return(console.log(triangle.join('\n')));
}

printTriangle(3);
printTriangle(5);