import pandas as pd


data=pd.read_csv('series2.csv')

f= open("GENRE_SERIES.sql","w+")

for i in range(12):

    id_series=str(data.loc[i,'id'])
    
    image=data.loc[i,'image']
    year=data.loc[i,'genre']
    f.write("update actor set image='{0}' where id='{1}'   ;\n".format(image,ID)) 
    f.write("update actor set BIRTH_DATE='{0}' where id='{1}'   ;\n".format(year,ID)) 
   
  