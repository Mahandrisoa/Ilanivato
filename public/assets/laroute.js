(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"admin","name":null,"action":"Modules\Admin\Http\Controllers\AdminController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users","name":"users.index","action":"Modules\Admin\Http\Controllers\UserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users\/create","name":"users.create","action":"Modules\Admin\Http\Controllers\UserController@create"},{"host":null,"methods":["POST"],"uri":"admin\/users","name":"users.store","action":"Modules\Admin\Http\Controllers\UserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users\/{user}","name":"users.show","action":"Modules\Admin\Http\Controllers\UserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users\/{user}\/edit","name":"users.edit","action":"Modules\Admin\Http\Controllers\UserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/users\/{user}","name":"users.update","action":"Modules\Admin\Http\Controllers\UserController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/users\/{user}","name":"users.destroy","action":"Modules\Admin\Http\Controllers\UserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/groups","name":"groups.index","action":"Modules\Admin\Http\Controllers\GroupController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/groups\/create","name":"groups.create","action":"Modules\Admin\Http\Controllers\GroupController@create"},{"host":null,"methods":["POST"],"uri":"admin\/groups","name":"groups.store","action":"Modules\Admin\Http\Controllers\GroupController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/groups\/{group}","name":"groups.show","action":"Modules\Admin\Http\Controllers\GroupController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/groups\/{group}\/edit","name":"groups.edit","action":"Modules\Admin\Http\Controllers\GroupController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/groups\/{group}","name":"groups.update","action":"Modules\Admin\Http\Controllers\GroupController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/groups\/{group}","name":"groups.destroy","action":"Modules\Admin\Http\Controllers\GroupController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"home","name":"home","action":"Modules\Member\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"home\/historique","name":"membres.historiques","action":"Modules\Member\Http\Controllers\MemberController@historique"},{"host":null,"methods":["GET","HEAD"],"uri":"home\/histories","name":"histories.index","action":"Modules\Member\Http\Controllers\HistoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"home\/histories\/create","name":"histories.create","action":"Modules\Member\Http\Controllers\HistoryController@create"},{"host":null,"methods":["POST"],"uri":"home\/histories","name":"histories.store","action":"Modules\Member\Http\Controllers\HistoryController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"home\/histories\/{history}","name":"histories.show","action":"Modules\Member\Http\Controllers\HistoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"home\/histories\/{history}\/edit","name":"histories.edit","action":"Modules\Member\Http\Controllers\HistoryController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"home\/histories\/{history}","name":"histories.update","action":"Modules\Member\Http\Controllers\HistoryController@update"},{"host":null,"methods":["DELETE"],"uri":"home\/histories\/{history}","name":"histories.destroy","action":"Modules\Member\Http\Controllers\HistoryController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"home\/bureau","name":"membres.bureaux","action":"Modules\Member\Http\Controllers\MemberController@bureau"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/user","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":"login","action":"App\Http\Controllers\Auth\LoginController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\LoginController@login"},{"host":null,"methods":["POST"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\LoginController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":"register","action":"App\Http\Controllers\Auth\RegisterController@showRegistrationForm"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\RegisterController@register"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset","name":"password.request","action":"App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm"},{"host":null,"methods":["POST"],"uri":"password\/email","name":"password.email","action":"App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{token}","name":"password.reset","action":"App\Http\Controllers\Auth\ResetPasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"password\/reset","name":null,"action":"App\Http\Controllers\Auth\ResetPasswordController@reset"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                if (this.absolute && this.isOtherHost(route)){
                    return "//" + route.host + "/" + uri + qs;
                }

                return this.getCorrectUrl(uri + qs);
            },

            isOtherHost: function (route){
                return route.host && route.host != window.location.hostname;
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if ( ! this.absolute) {
                    return url;
                }

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

