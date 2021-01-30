#include <stdio.h>

int main()
{
    
    int tinggi,setengahtinggi,i,j,k,l=1,n;
    char input;
    scanf("%d",&tinggi);   
    if(tinggi%2==0){
        setengahtinggi=tinggi/2;
        for(i=0;i<setengahtinggi;i++){ 
            for(j=setengahtinggi;j>i;j--){
              printf(" ");
            }
            
            for(k=1;k<=l;k++){ 
                if(k==1 || k==l){
                    printf("*");
                }else{
                    printf(" ");
                }
            }
            l+=2;
            printf("n");
        }
        
        l -=2;
          
        for(i=0;i<setengahtinggi;i++){
            for(j=0;j<=i;j++){
              printf(" ");
            }
            
            for(j=l;j>0;j--){
              if(j==1 || j==l){
                printf("*");
              }else{
                printf(" ");
              }
            }
            l-=2;
            printf("n");
        }
    }else{
        setengahtinggi=(tinggi/2);
        for(i=0;i<setengahtinggi;i++){
            for(j=setengahtinggi;j>=i;j--){
              printf(" ");
            }
            for(k=1;k<=l;k++){
              if(k==1 || k==l){
                printf("*");
              }else{
                printf(" ");
              }
            }
            l+=2;
            printf("n");
        }
        for(i=0;i<tinggi-setengahtinggi;i++){
            for(j=0;j<=i;j++){
              printf(" ");
            }
            for(j=l;j>0;j--){
              if(j==l || j==1){
                printf("*");
              }else{
                printf(" ");
              }
            }
            l-=2;
            printf("n");
        }

        l-=2;
        printf("n");
    }
    getch();
    return 0;
}