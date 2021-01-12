import pandas as pd


data=pd.read_csv('fantasy_character.csv',sep=",", encoding='cp1252')

f= open("INSERT_FANTASY_CHARACTERS.sql","w+")

for i in range(10):

    fname=data.loc[i,'fname']
    lname=data.loc[i,'lname']
    gender=data.loc[i,'gender']
    story=data.loc[i,'story']
    #story_id=data.loc[i,'idstory']
    image=data.loc[i,'image']

   # data.loc[i,'']
    f.write("INSERT INTO `fantasy_character`  (fname,lname,gender,story,image,story_id) VALUES('{0}','{1}','{2}','{3}','{4}','{5}');\n".format(fname,lname,gender,story,image,""))

