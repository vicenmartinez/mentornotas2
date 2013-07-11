<?php

/* JAMNotasFrontendBundle:Notas:editar.html.twig */
class __TwigTemplate_0c6c7e2b5cd62e39aaec4abccec09827 extends Twig_Template
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
         <h2>Formulario editar Nota ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nota_a_editar"), "id"), "html", null, true);
        echo "</h2>
         <form
           action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_editar", array("id" => $this->getAttribute($this->getContext($context, "nota_a_editar"), "id"))), "html", null, true);
        echo "\"
           method=\"POST\">
             <input type=\"text\" id=\"titulo\" name=\"titulo\"
                    value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nota_a_editar"), "titulo"), "html", null, true);
        echo "\" />
             <input type=\"submit\" value=\"guardar\" />
         </form>
     </div>

 ";
    }

    public function getTemplateName()
    {
        return "JAMNotasFrontendBundle:Notas:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  44 => 11,  39 => 9,  32 => 5,  29 => 4,  26 => 3,);
    }
}
