library(ggplot2)
setwd("H:/Practicals/R/EXP7")
fr = read.csv("lendingdata.csv")
ggplot(fr, aes(x=fr$loan_amount,y=fr$lender_count))+geom_point()+geom_smooth(method=lm,formula=y~x)