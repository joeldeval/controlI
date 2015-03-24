var timer,isstart,count,para,gmax,gbai,canvas,ctx;


window.onload=function(){
    var a,b;
    canvas = document.getElementsByTagName('canvas')[0];
    ctx = canvas.getContext('2d');
    canvas.width=canvas.height=400;
    ctx.fillRect(0,0,40,400);
    
    count=270;
    gmax=6000;
    ast();
};

function rst(){
    var a,b,c,d,e,f,h2,h3,h4,gu,ki,isg;
    var xp,yp,zp,xr,yr,zr;
    xp=[];yp=[];zp=[];xr=[];yr=[];zr=[];
    
    ki=[1,3,5,7,9,11,13,15];
    gu=[2,4,6,8,10,12,14];
    
    h2=mm(8,12)/20;
    h3=mm(4,6)/20;
    h4=mm(2,4)/20;
    
    for(a=0;a<3;a++){
        if(fi()){
            xp[a]=1;
        }else{
            yp[a]=1;
        }
        zp[a]=fi();
        zr[a]=kg(!zp[a]);
    }
    
    xr[0]=kg(xp[0]);
    yr[0]=kg(xp[0]);
    xr[1]=yr[1]=kg(xp[1]);
    xr[2]=yr[2]=kg(xp[2]);
    
    for(b=0;b<3;b++){
        if(fi()){
            a=yr[b];yr[b]=zr[b];zr[b]=a;
            a=yp[b];yp[b]=zp[b];zp[b]=a;
        }
    }
    
    a="b="+sc(1)+"("+nm()+"r*"+gk()+pm()+sc()+"(r*"+gk()+")*"+(mm(2,10)/2)+");\n"+
      "a="+nm()+"1"+pm()+"b*"+(mm(3,7)/10)+";\n"+
      "d=(abs(b)*"+mm(5,15)+")%2;\n"+
      "c="+sc()+"("+nm()+"r*"+gk()+pm()+sc()+"(r*"+gk()+")*"+(mm(1,4)/2)+");\n"+
      "if(d>1)d=2-d;\n"+
      "e=(d*"+mm(2,15)+")%2;if(e>1)e=2-e;\n"+
      "f=1-e;\n";
    if(fi(3))a+="d=1-d;\n";
    a+="\n"+
       "x="+nm()+cs(xp[0])+"("+nm()+"r*"+xr[0]+pm()+"c*"+(mm(1,6)/2)+")*a\n　"+
       pm()+cs(xp[1])+"("+nm()+"r*"+xr[1]+")*"+h2+"*d\n"+
       "　"+pm()+cs(xp[2])+"("+nm()+"r*"+xr[2]+")*"+h3+"*e\n　+sin(r*12.3456789)*0.1*f;\n"+
       "y="+nm()+cs(yp[0])+"("+nm()+"r*"+yr[0]+pm()+"c*"+(mm(1,6)/2)+")*a\n　"+
       pm()+cs(yp[1])+"("+nm()+"r*"+yr[1]+")*"+h2+"*d\n"+
       "　"+pm()+cs(yp[2])+"("+nm()+"r*"+yr[2]+")*"+h3+"*e\n　+cos(r*12.3456789)*0.1*f;\n"+
       "z="+nm()+cs(zp[0])+"("+nm()+"r*"+zr[0]+pm()+"c*"+(mm(1,6)/2)+")*a\n　"+
       pm()+cs(zp[1])+"("+nm()+"r*"+zr[1]+")*"+h2+"*d\n"+
       "　"+pm()+cs(zp[2])+"("+nm()+"r*"+zr[2]+")*"+h3+"*e\n　-sin(r*12.3456789)*0.1*f;\n";
    
    return a;
    para=0;
    
    function kg(na){
        if(na)return rg(ki);
        return rg(gu);
    }
    
    function fi(na){
        if(!na)na=5;
        return (Math.random()<na/10);
    }
    
    function cs(n){
        if(n)return "cos";
        return "sin";
    }
    
    function sc(n){
        a=fi();
        if(a){
            if(!ki.length)a=!a;
        }else{
            if(!gu.length)a=!a;
        }
        isg=a;
        if(n)a=!a;
        if(a)return "cos";
        return "sin";
    }
    
    function gk(){
        if(isg)return rg(ki);
        return rg(gu);
    }
    
    function pm(){
        if(fi())return "-";
        return "+";
    }
    
    function nm(){
        if(fi())return "-";
        return "";
    }
    
    function mm(mi,ma){
        return (mi+Math.random()*(ma-mi+1))|0;
    }
    
    function rg(ha){
        var a,b;
        a=(ha.length*Math.random())|0;
        b=ha[a];
        ha[a]=ha[ha.length-1];
        ha.pop();
        return b;
    }
}

function ast(){
    var a,b,c,d,e,x,y,z,x1,y1,z1,z2,yp,yp2,xp,xp2,pt;
    
    clearTimeout(timer);

    if(!para){
        a="var a,b,c,d,e,x,y,z,step,r,sin,cos,abs,pow,jq,max;"+
                "step=Math.PI*10/gmax;"+
                    "sin=Math.sin;cos=Math.cos;abs=Math.abs;pow=Math.pow;"+
                        "para=new Float32Array(gmax*3);"+
                            "r=max=0;"+
                                "for(jq=0;jq<gmax;jq++){";
        a+=rst();
        a+="b=x*x+y*y+z*z;if(b>max)max=b;"+
            "para[jq*3]=x;para[jq*3+1]=y;para[jq*3+2]=z;r+=step;}"+
                "gbai=2.2/Math.pow(max,0.5);";
        
            a=new Function(a);
            a();
    }
    
    a=count/47;
    a=1.5+Math.sin(a)/2;
    yp=Math.sin(a);
    yp2=-Math.cos(a);
    a=count/29;
    xp=Math.sin(a);
    xp2=-Math.cos(a);
    
    ctx.globalCompositeOperation = "source-over";
    ctx.fillStyle="rgb(0,0,0)";
    ctx.fillRect(0,0,400,400);
    
        ctx.fillStyle="rgb(254,254,254)";

    
    r=count/2000;
    r=0;
    
    ctx.beginPath();

    for(a=0;a<para.length;a+=3){
        x=para[a];
        y=para[a+1];
        z=para[a+2];
        y1=y*yp+z*yp2;
        z1=y*yp2-z*yp;
        x1=x*xp+z1*xp2;
        z=x*xp2-z1*xp;
        z=(1+z/5)*gbai;
        x=200+x1*100*z;
        y=200+y1*100*z;
        
            if(a){
                ctx.lineTo(x,y);
            }else{
                ctx.moveTo(x,y);
            }
 
    }
    

        ctx.fill();
    
    count++;
    timer=setTimeout(ast,30);
}