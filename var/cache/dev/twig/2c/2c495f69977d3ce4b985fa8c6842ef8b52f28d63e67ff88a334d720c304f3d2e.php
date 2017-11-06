<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_67df203297ae53eedef7dd578a07ed5b038c60b38209ccb58babe7efb1d78604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d482e612352f318dbe6215121f552fefb9315e52a05cf3478ef70c3af811cede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d482e612352f318dbe6215121f552fefb9315e52a05cf3478ef70c3af811cede->enter($__internal_d482e612352f318dbe6215121f552fefb9315e52a05cf3478ef70c3af811cede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ca9a3bf12d4cd61fe6d08b136391a84620123c8a871d670c47c92603b77ad7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9a3bf12d4cd61fe6d08b136391a84620123c8a871d670c47c92603b77ad7bc->enter($__internal_ca9a3bf12d4cd61fe6d08b136391a84620123c8a871d670c47c92603b77ad7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d482e612352f318dbe6215121f552fefb9315e52a05cf3478ef70c3af811cede->leave($__internal_d482e612352f318dbe6215121f552fefb9315e52a05cf3478ef70c3af811cede_prof);

        
        $__internal_ca9a3bf12d4cd61fe6d08b136391a84620123c8a871d670c47c92603b77ad7bc->leave($__internal_ca9a3bf12d4cd61fe6d08b136391a84620123c8a871d670c47c92603b77ad7bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
