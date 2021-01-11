import pandas as pd


data=pd.read_csv('series2.csv')
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

f= open("INSERT_Series.sql","w+")

for i in range(20):
     SERIES_NAME=data.loc[i,'title']
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
     admin_inserted=data.loc[i,'admin_inserted']
     picture=data.loc[i,'poster']
     number_episode=data.loc[i,'number_episode']
     #print("insert into series(ID,NAME_MOVIE,YEAR,DURATION_MIN,DESCRIPTION_OF_MOVIE,LANGUAGE_MOBIE,REVENUE,BUDGET,HOME_PAGE_LINK,IMDB_RATE,IMDB_RATE_COUNT) VALUES('{0}','{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}','{10}') ; \n".format(ID,MOVIE_NAME,YEAR,DURATION_MINUTE,DESCRIPTION,LANGUAGE,REVENUE,BUDGET,LINK,IMDB_RATE,IMDB_COUNT))
     f.write("insert into series(ID,NAME_SERIES,YEAR,DURATION_MIN,DESCRIPTION,LANGUAGE,REVENUE,BUDGET,HOME_PAGE_LINK,IMDB_RATE,IMDB_RATE_COUNT,ADMIN_INSETED_SERIES,POSTER,NUMBER_OF_EPISODES_IN_SEASON) VALUES('{0}','{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}','{10}','{11}','{12}','{13}') ; \n".format(ID,SERIES_NAME,YEAR,DURATION_MINUTE,DESCRIPTION,LANGUAGE,REVENUE,BUDGET,LINK,IMDB_RATE,IMDB_COUNT,admin_inserted,picture,number_episode))
    


