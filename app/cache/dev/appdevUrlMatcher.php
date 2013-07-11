<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if ($pathinfo === '/welcome') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // JAMNotasBackendBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasBackendBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'JAMNotasBackendBundle_homepage'));
        }

        // jamn_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_jamn_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jamn_homepage');
            }
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',  '_route' => 'jamn_homepage',);
        }
        not_jamn_homepage:

        // jamn_conetiqueta
        if (0 === strpos($pathinfo, '/conetiqueta') && preg_match('#^/conetiqueta/(?P<etiqueta>[^/]+?)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_jamn_conetiqueta;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',)), array('_route' => 'jamn_conetiqueta'));
        }
        not_jamn_conetiqueta:

        // jamn_buscar
        if ($pathinfo === '/buscar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_jamn_buscar;
            }
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',  'etiqueta' => 'termino',  '_route' => 'jamn_buscar',);
        }
        not_jamn_buscar:

        // jamn_nota
        if (0 === strpos($pathinfo, '/nota') && preg_match('#^/nota/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_jamn_nota;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::indexAction',)), array('_route' => 'jamn_nota'));
        }
        not_jamn_nota:

        // jamn_nueva
        if ($pathinfo === '/nueva') {
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::nuevaAction',  '_route' => 'jamn_nueva',);
        }

        // jamn_editar
        if (0 === strpos($pathinfo, '/editar') && preg_match('#^/editar/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::editarAction',)), array('_route' => 'jamn_editar'));
        }

        // jamn_borrar
        if (0 === strpos($pathinfo, '/borrar') && preg_match('#^/borrar/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::borrarAction',)), array('_route' => 'jamn_borrar'));
        }

        // jamn_espacio_premium
        if ($pathinfo === '/miespacio') {
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::espacioPremiumAction',  '_route' => 'jamn_espacio_premium',);
        }

        // jamn_rss
        if ($pathinfo === '/rss') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_jamn_rss;
            }
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::rssAction',  '_route' => 'jamn_rss',);
        }
        not_jamn_rss:

        // jamn_registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'JAMNotasFrontendBundle:Login:registro',  '_route' => 'jamn_registro',);
        }

        // jamn_activar_cuenta
        if (0 === strpos($pathinfo, '/activar') && preg_match('#^/activar/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JAMNotasFrontendBundle:Login:activar',)), array('_route' => 'jamn_activar_cuenta'));
        }

        // jamn_tarifas
        if ($pathinfo === '/tarifas') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_jamn_tarifas;
            }
            return array (  '_controller' => 'JAMNotasFrontendBundle:Contratos:tarifasPremium',  '_route' => 'jamn_tarifas',);
        }
        not_jamn_tarifas:

        // jamn_contratar
        if ($pathinfo === '/contratar') {
            return array (  '_controller' => 'JAMNotasFrontendBundle:Contratos:contratarPremium',  '_route' => 'jamn_contratar',);
        }

        // jamn_damenotas
        if (0 === strpos($pathinfo, '/dameNotas') && preg_match('#^/dameNotas(?:\\.(?P<_format>json|xml))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\NotasController::dameNotasAction',  '_format' => 'json',)), array('_route' => 'jamn_damenotas'));
        }

        // JAMN_ORM_crear
        if ($pathinfo === '/estudio_orm/crear') {
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::crearAction',  '_route' => 'JAMN_ORM_crear',);
        }

        // JAMN_ORM_recuperar
        if (0 === strpos($pathinfo, '/estudio_orm/recuperar') && preg_match('#^/estudio_orm/recuperar/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::recuperarAction',)), array('_route' => 'JAMN_ORM_recuperar'));
        }

        // JAMN_ORM_recuperar_notas
        if ($pathinfo === '/estudio_orm/recuperar_notas') {
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioORMController::recuperarNotasAction',  '_route' => 'JAMN_ORM_recuperar_notas',);
        }

        // jamn_EVF
        if ($pathinfo === '/estudio_valyforms/valida_usuario') {
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioValidacionYFormularioController::validaUsuarioAction',  '_route' => 'jamn_EVF',);
        }

        // jamn_EVF_form_usuario
        if ($pathinfo === '/estudio_valyforms/form_usuario') {
            return array (  '_controller' => 'jazzyweb\\AulasMentor\\NotasFrontendBundle\\Controller\\EstudioValidacionYFormularioController::formUsuarioAction',  '_route' => 'jamn_EVF_form_usuario',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
