import pandas as pd

col_list = ["original_title"]
data=pd.read_csv('tmdb_5000_movies.csv')
#clmn =list(data)
ID=0
MOVIE_NAME=""

DURATION_MINUTE=""
DESCRIPTION=""
LANGUAGE=0
REVENUE=0
BUDGET=0
LINK=""
IMDB_RATE=0.1
IMDB_COUNT=0

f= open("INSERT_MOVIES.sql","w+")
# for i in range(3):
#      f.write("This is line {0}  {1}\n" .format(i,i+10))

for i in range(30):
     MOVIE_NAME=data.loc[i,'title']
     ID=data.loc[i,'id']
     YEAR=data.loc[i,'year']
     DURATION_MINUTE=data.loc[i,'runtime']
     LANGUAGE  =data.loc[i,'original_language']
     REVENUE =data.loc[i,'revenue']
     BUDGET =data.loc[i,'budget']
     LINK =data.loc[i,'homepage']
     IMDB_COUNT =data.loc[i,'vote_count']
     IMDB_RATE=data.loc[i,'vote_average']
     DESCRIPTION =data.loc[i,'tagline']
     f.write("insert into movie(ID,NAME_MOVIE,YEAR,DURATION_MIN,DESCRIPTION_OF_MOVIE,LANGUAGE_MOBIE,REVENUE,BUDGET,HOME_PAGE_LINK,IMDB_RATE,IMDB_RATE_COUNT) VALUES('{0}','{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}','{10}') ; \n".format(ID,MOVIE_NAME,YEAR,DURATION_MINUTE,DESCRIPTION,LANGUAGE,REVENUE,BUDGET,LINK,IMDB_RATE,IMDB_COUNT))
    



    