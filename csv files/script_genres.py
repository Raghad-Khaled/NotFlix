import pandas as pd


data=pd.read_csv('genre_type.csv')

f= open("INSERT_GENRES.sql","w+")

for i in range(12):

    ID=str(data.loc[i,'ID'])
    GENRE_TYPE=data.loc[i,'GENRE_TYPE']
    f.write("INSERT INTO genre (ID,GENRE_TYPE) VALUES('{0}','{1}');\n".format(ID,GENRE_TYPE)) 
   
     

    