from django.conf.urls import handler400, handler403, handler404, handler500


__all__ = ['handler400', 'handler403', 'handler404', 'handler505', 'include', 'url']



handler400 = "django.views.defaults.bad_request"
handler403 = "django.views.defaults.permission_denied"
handler404 = "django.views.defaults.page_not_found"
handler500 = "django.views.defaults.server_error"