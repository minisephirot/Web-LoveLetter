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
        $__internal_756d0f94961281c25b580aaca6753f57275c3578b964d610ff32aae6f1351d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756d0f94961281c25b580aaca6753f57275c3578b964d610ff32aae6f1351d1d->enter($__internal_756d0f94961281c25b580aaca6753f57275c3578b964d610ff32aae6f1351d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3bf43f238028596e84336388618869761b81cdae721ccc6d78e555c5d5033531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf43f238028596e84336388618869761b81cdae721ccc6d78e555c5d5033531->enter($__internal_3bf43f238028596e84336388618869761b81cdae721ccc6d78e555c5d5033531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_756d0f94961281c25b580aaca6753f57275c3578b964d610ff32aae6f1351d1d->leave($__internal_756d0f94961281c25b580aaca6753f57275c3578b964d610ff32aae6f1351d1d_prof);

        
        $__internal_3bf43f238028596e84336388618869761b81cdae721ccc6d78e555c5d5033531->leave($__internal_3bf43f238028596e84336388618869761b81cdae721ccc6d78e555c5d5033531_prof);

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
