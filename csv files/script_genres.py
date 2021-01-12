import pandas as pd


data=pd.read_csv('series2.csv')

f= open("add_genre_series.sql","w+")

for i in range(20):

    id_series=str(data.loc[i,'id'])
    genre_id=data.loc[i,'genre']
    #f.write("update actor set image='{0}' where id='{1}'   ;\n".format(image,ID)) 
    f.write("INSERT INTO `genre_relation_series`(`SERIES_ID`, `GENRE_ID`) VALUES ('{0}','{1}');\n".format(id_series,genre_id))
   
     

    