from django.contrib import admin

# Register your models here.

from .models import fuel,pump,fuelsale


admin.site.register(fuel)
admin.site.register(pump)
admin.site.register(fuelsale)