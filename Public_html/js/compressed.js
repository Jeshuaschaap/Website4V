var divHeightMasterClasses=document.getElementsByClassName("heightAdjustMaster"),divHeightChildClasses=document.getElementsByClassName("heightAdjustChild"),maxHeight=window.getComputedStyle(document.documentElement).getPropertyValue("--pictextrow-height");function getFullHeight(e,t,i){var l;return l=window.getComputedStyle(e,null).getPropertyValue("height"),l+=window.getComputedStyle(e,null).getPropertyValue("padding-top"),l+=window.getComputedStyle(e,null).getPropertyValue("padding-bottom"),1==t&&(l+=window.getComputedStyle(e,null).getPropertyValue("border-top"),l+=window.getComputedStyle(e,null).getPropertyValue("border-bottom")),1==i&&(l+=window.getComputedStyle(e,null).getPropertyValue("margin-top"),l+=window.getComputedStyle(e,null).getPropertyValue("margin-bottom")),l}function heightAdjust(){for(i=0;i<divHeightMasterClasses.length;i++)if(1==window.getComputedStyle(divHeightMasterClasses[i],null).getPropertyValue("--pictext-width"))divHeightChildClasses[i].style.height=maxHeight;else{var e=window.getComputedStyle(divHeightMasterClasses[i],null).getPropertyValue("height");parseFloat(e)>=parseFloat(maxHeight)?divHeightChildClasses[i].style.height=parseFloat(e)+.1+"px":divHeightChildClasses[i].style.height=maxHeight}}""==maxHeight&&console.error("No minimum height found, please insert the --pictextrow-height variable into your head by using the :root pseudo class."),console.log(maxHeight),divHeightChildClasses.length==divHeightMasterClasses.length?heightAdjust():console.error("Invalid classlength: The amount of master classes is not equal to the amount of child classes. please check your code for any missing classes."),window.onresize=heightAdjust;