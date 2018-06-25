double TP;
double SL;
double Lots;
double Magic = 123456;
string ea_name = "bbbde7cc6501302810f27e2_fucku_";
bool Open_Buy(){
 if( iBands(NULL,PERIOD_M1,1,1,1,PRICE_CLOSE,MODE_MAIN,1) > iBands(NULL,PERIOD_M1,1,1,1,PRICE_CLOSE,MODE_MAIN,1) ) { 
 return 1; 
 } else 
return 0; }
bool Open_Sell(){
return 0; }
bool Close_Buy(){
return 0; }
bool Close_Sell(){
return 0; }
bool Option(){
TP = 300;
SL = 300;
Lots = 0.01;
if( TP != 0 ){
return 1;
}else return 0;
}