
const fs = require('fs');
const path = require('path');
const sharp = require('sharp');
const chalk = require('chalk')
const sizeOf = require('image-size');
const fsExtra = require('fs-extra')

fsExtra.emptyDirSync('./build');
let ncp = require('ncp').ncp;
let imageErrors=[] ;
ncp.limit = 16;
 function copyToBuild(){
     
    ncp('./dist', 'build', function (err) {
        if (err) {
          return console.error(err);
        }
       });
 console.log('one more second...');
       console.log(chalk.red(imageErrors));
 } 
  
 console.log(chalk.green(' wait a second ..'));

 setTimeout(() => {
    
    copyToBuild();
 }, 2000);

 