from django import template
from django.http import response
from django.http.response import HttpResponseBase
from django.shortcuts import render
from django.template import loader
from django.http import HttpResponse

# Create your views here.

def register(request):
    template = loader.get_template('shop/registration.html')
    return HttpResponse(template.render({}, request))