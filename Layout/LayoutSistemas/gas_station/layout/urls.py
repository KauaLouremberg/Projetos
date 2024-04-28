from django.urls import path


from django.contrib import admin
from django.urls import include, path
from . import views

app_name = 'layout'

urlpatterns = [
    path('', views.index, name='index'),

]