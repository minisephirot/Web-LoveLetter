<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
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
        $__internal_55215590c298dc1f192386cb9bea3bb90516552045f4b7f4561954d126e74a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55215590c298dc1f192386cb9bea3bb90516552045f4b7f4561954d126e74a93->enter($__internal_55215590c298dc1f192386cb9bea3bb90516552045f4b7f4561954d126e74a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_84414df6e6f0a9de748a12b83e2657c73d07ffc7efaaffe7b7045eed3d409302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84414df6e6f0a9de748a12b83e2657c73d07ffc7efaaffe7b7045eed3d409302->enter($__internal_84414df6e6f0a9de748a12b83e2657c73d07ffc7efaaffe7b7045eed3d409302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_55215590c298dc1f192386cb9bea3bb90516552045f4b7f4561954d126e74a93->leave($__internal_55215590c298dc1f192386cb9bea3bb90516552045f4b7f4561954d126e74a93_prof);

        
        $__internal_84414df6e6f0a9de748a12b83e2657c73d07ffc7efaaffe7b7045eed3d409302->leave($__internal_84414df6e6f0a9de748a12b83e2657c73d07ffc7efaaffe7b7045eed3d409302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
