<?php

/* JAMNotasFrontendBundle:Notas:nueva.html.twig */
class __TwigTemplate_c9af3778c96565e86c8d4c6741bfd7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JAMNotasFrontendBundle:Notas:layout-etiquetas-notas.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JAMNotasFrontendBundle:Notas:layout-etiquetas-notas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
     ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

     <div id=\"detalle_nota\" class=\"marco detalle_nota\">
         <h2>Detalle de nota</h2>
         <h2>Formulario crear Nueva Nota</h2>
         <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_nueva"), "html", null, true);
        echo "\" method=\"POST\">
             nombre:<input type=\"text\" id=\"nombre\" name=\"nombre\" />
             <input type=\"submit\" value=\"guardar\" />

         </form>
     </div>

 ";
    }

    public function getTemplateName()
    {
        return "JAMNotasFrontendBundle:Notas:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  32 => 5,  29 => 4,  26 => 3,);
    }
}
